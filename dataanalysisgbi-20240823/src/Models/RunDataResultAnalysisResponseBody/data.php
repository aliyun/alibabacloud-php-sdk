<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisResponseBody;

use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisResponseBody\data\visualization;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Access was denied, message: No such namespace namespaces/tech-scp-chain7.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example result
     *
     * @var string
     */
    public $event;

    /**
     * @example DA2578F7-88A5-5D6E-9305-33E724E97D60
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rewrite;

    /**
     * @example select p.product_id, p.product_name, sum(o.quantity) as total_sales from products p join orders o on p.product_id = o.product_id where o.order_date between \\"2022-10-22\\" and \\"2024-10-22\\" group by p.product_id, p.product_name having total_sales > 5
     *
     * @var string
     */
    public $sql;

    /**
     * @var visualization
     */
    public $visualization;
    protected $_name = [
        'errorMessage'  => 'errorMessage',
        'event'         => 'event',
        'requestId'     => 'requestId',
        'rewrite'       => 'rewrite',
        'sql'           => 'sql',
        'visualization' => 'visualization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->rewrite) {
            $res['rewrite'] = $this->rewrite;
        }
        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }
        if (null !== $this->visualization) {
            $res['visualization'] = null !== $this->visualization ? $this->visualization->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['event'])) {
            $model->event = $map['event'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['rewrite'])) {
            $model->rewrite = $map['rewrite'];
        }
        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }
        if (isset($map['visualization'])) {
            $model->visualization = visualization::fromMap($map['visualization']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody;

use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data\sqlData;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data\visualization;
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
     * @example rewrite
     *
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $evidence;

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
     * @var string[]
     */
    public $selector;

    /**
     * @example sessionid1
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example select p.product_id, p.product_name, sum(o.quantity) as total_sales from products p join orders o on p.product_id = o.product_id where o.order_date between \\"2022-10-22\\" and \\"2024-10-22\\" group by p.product_id, p.product_name having total_sales > 5
     *
     * @var string
     */
    public $sql;

    /**
     * @var sqlData
     */
    public $sqlData;

    /**
     * @example Can not issue data manipulation statements with executeQuery()
     *
     * @var string
     */
    public $sqlError;

    /**
     * @var visualization
     */
    public $visualization;
    protected $_name = [
        'errorMessage'  => 'errorMessage',
        'event'         => 'event',
        'evidence'      => 'evidence',
        'requestId'     => 'requestId',
        'rewrite'       => 'rewrite',
        'selector'      => 'selector',
        'sessionId'     => 'sessionId',
        'sql'           => 'sql',
        'sqlData'       => 'sqlData',
        'sqlError'      => 'sqlError',
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
        if (null !== $this->evidence) {
            $res['evidence'] = $this->evidence;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->rewrite) {
            $res['rewrite'] = $this->rewrite;
        }
        if (null !== $this->selector) {
            $res['selector'] = $this->selector;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }
        if (null !== $this->sqlData) {
            $res['sqlData'] = null !== $this->sqlData ? $this->sqlData->toMap() : null;
        }
        if (null !== $this->sqlError) {
            $res['sqlError'] = $this->sqlError;
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
        if (isset($map['evidence'])) {
            $model->evidence = $map['evidence'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['rewrite'])) {
            $model->rewrite = $map['rewrite'];
        }
        if (isset($map['selector'])) {
            if (!empty($map['selector'])) {
                $model->selector = $map['selector'];
            }
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }
        if (isset($map['sqlData'])) {
            $model->sqlData = sqlData::fromMap($map['sqlData']);
        }
        if (isset($map['sqlError'])) {
            $model->sqlError = $map['sqlError'];
        }
        if (isset($map['visualization'])) {
            $model->visualization = visualization::fromMap($map['visualization']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunSqlGenerationResponseBody;

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
     * @example sql
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
     * @example f64c38dd-a235-4bb4-ae6c-79eaedcba699
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
     * @example Can not issue data manipulation statements with executeQuery()
     *
     * @var string
     */
    public $sqlError;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'event'        => 'event',
        'evidence'     => 'evidence',
        'requestId'    => 'requestId',
        'rewrite'      => 'rewrite',
        'selector'     => 'selector',
        'sessionId'    => 'sessionId',
        'sql'          => 'sql',
        'sqlError'     => 'sqlError',
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
        if (null !== $this->sqlError) {
            $res['sqlError'] = $this->sqlError;
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
        if (isset($map['sqlError'])) {
            $model->sqlError = $map['sqlError'];
        }

        return $model;
    }
}

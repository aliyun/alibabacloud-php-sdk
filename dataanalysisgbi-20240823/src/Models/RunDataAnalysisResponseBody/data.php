<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data\sqlData;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data\visualization;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $event;
    /**
     * @var string
     */
    public $evidence;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
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
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $sql;
    /**
     * @var sqlData
     */
    public $sqlData;
    /**
     * @var string
     */
    public $sqlError;
    /**
     * @var visualization
     */
    public $visualization;
    protected $_name = [
        'errorMessage'   => 'errorMessage',
        'event'          => 'event',
        'evidence'       => 'evidence',
        'httpStatusCode' => 'httpStatusCode',
        'requestId'      => 'requestId',
        'rewrite'        => 'rewrite',
        'selector'       => 'selector',
        'sessionId'      => 'sessionId',
        'sql'            => 'sql',
        'sqlData'        => 'sqlData',
        'sqlError'       => 'sqlError',
        'visualization'  => 'visualization',
    ];

    public function validate()
    {
        if (\is_array($this->selector)) {
            Model::validateArray($this->selector);
        }
        if (null !== $this->sqlData) {
            $this->sqlData->validate();
        }
        if (null !== $this->visualization) {
            $this->visualization->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->rewrite) {
            $res['rewrite'] = $this->rewrite;
        }

        if (null !== $this->selector) {
            if (\is_array($this->selector)) {
                $res['selector'] = [];
                $n1              = 0;
                foreach ($this->selector as $item1) {
                    $res['selector'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        if (null !== $this->sqlData) {
            $res['sqlData'] = null !== $this->sqlData ? $this->sqlData->toArray($noStream) : $this->sqlData;
        }

        if (null !== $this->sqlError) {
            $res['sqlError'] = $this->sqlError;
        }

        if (null !== $this->visualization) {
            $res['visualization'] = null !== $this->visualization ? $this->visualization->toArray($noStream) : $this->visualization;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['rewrite'])) {
            $model->rewrite = $map['rewrite'];
        }

        if (isset($map['selector'])) {
            if (!empty($map['selector'])) {
                $model->selector = [];
                $n1              = 0;
                foreach ($map['selector'] as $item1) {
                    $model->selector[$n1++] = $item1;
                }
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

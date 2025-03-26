<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisResponseBody\data\visualization;

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
    public $requestId;

    /**
     * @var string
     */
    public $rewrite;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var visualization
     */
    public $visualization;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'event' => 'event',
        'requestId' => 'requestId',
        'rewrite' => 'rewrite',
        'sql' => 'sql',
        'visualization' => 'visualization',
    ];

    public function validate()
    {
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

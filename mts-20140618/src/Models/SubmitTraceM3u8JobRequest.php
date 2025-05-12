<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;

class SubmitTraceM3u8JobRequest extends Model
{
    /**
     * @var string
     */
    public $keyUri;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $trace;
    protected $_name = [
        'keyUri' => 'KeyUri',
        'mediaId' => 'MediaId',
        'output' => 'Output',
        'params' => 'Params',
        'trace' => 'Trace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyUri) {
            $res['KeyUri'] = $this->keyUri;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
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
        if (isset($map['KeyUri'])) {
            $model->keyUri = $map['KeyUri'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }

        return $model;
    }
}

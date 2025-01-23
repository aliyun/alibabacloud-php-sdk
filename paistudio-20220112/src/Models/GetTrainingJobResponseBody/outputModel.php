<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Dara\Model;

class outputModel extends Model
{
    /**
     * @var string
     */
    public $outputChannelName;
    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'outputChannelName' => 'OutputChannelName',
        'uri'               => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputChannelName) {
            $res['OutputChannelName'] = $this->outputChannelName;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['OutputChannelName'])) {
            $model->outputChannelName = $map['OutputChannelName'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}

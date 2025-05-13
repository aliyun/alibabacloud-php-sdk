<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentContactStruct extends Model
{
    /**
     * @var string[]
     */
    public $channel;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactType;
    protected $_name = [
        'channel' => 'channel',
        'contactId' => 'contactId',
        'contactType' => 'contactType',
    ];

    public function validate()
    {
        if (\is_array($this->channel)) {
            Model::validateArray($this->channel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            if (\is_array($this->channel)) {
                $res['channel'] = [];
                $n1 = 0;
                foreach ($this->channel as $item1) {
                    $res['channel'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }

        if (null !== $this->contactType) {
            $res['contactType'] = $this->contactType;
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
        if (isset($map['channel'])) {
            if (!empty($map['channel'])) {
                $model->channel = [];
                $n1 = 0;
                foreach ($map['channel'] as $item1) {
                    $model->channel[$n1++] = $item1;
                }
            }
        }

        if (isset($map['contactId'])) {
            $model->contactId = $map['contactId'];
        }

        if (isset($map['contactType'])) {
            $model->contactType = $map['contactType'];
        }

        return $model;
    }
}

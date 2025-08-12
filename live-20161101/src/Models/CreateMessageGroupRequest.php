<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CreateMessageGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'appId' => 'AppId',
        'creatorId' => 'CreatorId',
        'extension' => 'Extension',
    ];

    public function validate()
    {
        if (\is_array($this->extension)) {
            Model::validateArray($this->extension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->extension) {
            if (\is_array($this->extension)) {
                $res['Extension'] = [];
                foreach ($this->extension as $key1 => $value1) {
                    $res['Extension'][$key1] = $value1;
                }
            }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Extension'])) {
            if (!empty($map['Extension'])) {
                $model->extension = [];
                foreach ($map['Extension'] as $key1 => $value1) {
                    $model->extension[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

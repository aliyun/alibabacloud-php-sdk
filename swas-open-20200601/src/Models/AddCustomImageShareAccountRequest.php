<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class AddCustomImageShareAccountRequest extends Model
{
    /**
     * @var int[]
     */
    public $account;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account'     => 'Account',
        'clientToken' => 'ClientToken',
        'imageId'     => 'ImageId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->account)) {
            Model::validateArray($this->account);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            if (\is_array($this->account)) {
                $res['Account'] = [];
                $n1             = 0;
                foreach ($this->account as $item1) {
                    $res['Account'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Account'])) {
            if (!empty($map['Account'])) {
                $model->account = [];
                $n1             = 0;
                foreach ($map['Account'] as $item1) {
                    $model->account[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

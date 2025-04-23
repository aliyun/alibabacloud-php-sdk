<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetPostScriptsRequest\postInstallScripts;

class SetPostScriptsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var postInstallScripts[]
     */
    public $postInstallScripts;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'postInstallScripts' => 'PostInstallScripts',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->postInstallScripts)) {
            Model::validateArray($this->postInstallScripts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->postInstallScripts) {
            if (\is_array($this->postInstallScripts)) {
                $res['PostInstallScripts'] = [];
                $n1 = 0;
                foreach ($this->postInstallScripts as $item1) {
                    $res['PostInstallScripts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['PostInstallScripts'])) {
            if (!empty($map['PostInstallScripts'])) {
                $model->postInstallScripts = [];
                $n1 = 0;
                foreach ($map['PostInstallScripts'] as $item1) {
                    $model->postInstallScripts[$n1++] = postInstallScripts::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

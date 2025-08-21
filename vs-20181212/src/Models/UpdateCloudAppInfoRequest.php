<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateCloudAppInfoRequest\patch;

class UpdateCloudAppInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var patch
     */
    public $patch;

    /**
     * @var string
     */
    public $stablePatchId;
    protected $_name = [
        'appId' => 'AppId',
        'description' => 'Description',
        'patch' => 'Patch',
        'stablePatchId' => 'StablePatchId',
    ];

    public function validate()
    {
        if (null !== $this->patch) {
            $this->patch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->patch) {
            $res['Patch'] = null !== $this->patch ? $this->patch->toArray($noStream) : $this->patch;
        }

        if (null !== $this->stablePatchId) {
            $res['StablePatchId'] = $this->stablePatchId;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Patch'])) {
            $model->patch = patch::fromMap($map['Patch']);
        }

        if (isset($map['StablePatchId'])) {
            $model->stablePatchId = $map['StablePatchId'];
        }

        return $model;
    }
}

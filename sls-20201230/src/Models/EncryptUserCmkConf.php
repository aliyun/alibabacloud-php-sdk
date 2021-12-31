<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class EncryptUserCmkConf extends Model
{
    /**
     * @description arn
     *
     * @var string
     */
    public $arn;

    /**
     * @description cmk_key_id
     *
     * @var string
     */
    public $cmkKeyId;

    /**
     * @description region_id
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'arn'      => 'arn',
        'cmkKeyId' => 'cmk_key_id',
        'regionId' => 'region_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }
        if (null !== $this->cmkKeyId) {
            $res['cmk_key_id'] = $this->cmkKeyId;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptUserCmkConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }
        if (isset($map['cmk_key_id'])) {
            $model->cmkKeyId = $map['cmk_key_id'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        return $model;
    }
}

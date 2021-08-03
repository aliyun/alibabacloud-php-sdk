<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetIdpMetadataRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $idpMetadata;
    protected $_name = [
        'regionId'     => 'RegionId',
        'directoryId'  => 'DirectoryId',
        'officeSiteId' => 'OfficeSiteId',
        'idpMetadata'  => 'IdpMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->idpMetadata) {
            $res['IdpMetadata'] = $this->idpMetadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetIdpMetadataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['IdpMetadata'])) {
            $model->idpMetadata = $map['IdpMetadata'];
        }

        return $model;
    }
}

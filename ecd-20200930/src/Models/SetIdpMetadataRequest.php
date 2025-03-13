<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetIdpMetadataRequest extends Model
{
    /**
     * @description The workspace ID. This parameter is the same as `OfficeSiteId`. We recommend that you use `OfficeSiteId` to replace `DirectoryId`. You can specify only `DirectoryId` or `OfficeSiteId`.
     *
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The metadata of the IdP.
     *
     * This parameter is required.
     * @example &lt;EntityDescriptor ID********Descriptor&gt;
     *
     * @var string
     */
    public $idpMetadata;

    /**
     * @description The workspace ID.
     *
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'directoryId'  => 'DirectoryId',
        'idpMetadata'  => 'IdpMetadata',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->idpMetadata) {
            $res['IdpMetadata'] = $this->idpMetadata;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['IdpMetadata'])) {
            $model->idpMetadata = $map['IdpMetadata'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

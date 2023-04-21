<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetIdpMetadataRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The metadata of the IdP.
     *
     * @example &lt;EntityDescriptor ID********Descriptor&gt;
     *
     * @var string
     */
    public $idpMetadata;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the region.
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebHostingConfigRequest extends Model
{
    /**
     * @example 42.120.72.0/24
     *
     * @var string
     */
    public $allowedIps;

    /**
     * @var string
     */
    public $errorHttpStatus;

    /**
     * @example error.html
     *
     * @var string
     */
    public $errorPath;

    /**
     * @example index.html
     *
     * @var string
     */
    public $indexPath;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'allowedIps'      => 'AllowedIps',
        'errorHttpStatus' => 'ErrorHttpStatus',
        'errorPath'       => 'ErrorPath',
        'indexPath'       => 'IndexPath',
        'spaceId'         => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedIps) {
            $res['AllowedIps'] = $this->allowedIps;
        }
        if (null !== $this->errorHttpStatus) {
            $res['ErrorHttpStatus'] = $this->errorHttpStatus;
        }
        if (null !== $this->errorPath) {
            $res['ErrorPath'] = $this->errorPath;
        }
        if (null !== $this->indexPath) {
            $res['IndexPath'] = $this->indexPath;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebHostingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedIps'])) {
            $model->allowedIps = $map['AllowedIps'];
        }
        if (isset($map['ErrorHttpStatus'])) {
            $model->errorHttpStatus = $map['ErrorHttpStatus'];
        }
        if (isset($map['ErrorPath'])) {
            $model->errorPath = $map['ErrorPath'];
        }
        if (isset($map['IndexPath'])) {
            $model->indexPath = $map['IndexPath'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}

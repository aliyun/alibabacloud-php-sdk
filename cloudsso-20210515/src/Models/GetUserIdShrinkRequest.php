<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetUserIdShrinkRequest extends Model
{
    /**
     * @description The ID of the resource directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The identifier information about the user that is synchronized from an external identity provider (IdP).
     *
     * @var string
     */
    public $externalIdShrink;
    protected $_name = [
        'directoryId'      => 'DirectoryId',
        'externalIdShrink' => 'ExternalId',
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
        if (null !== $this->externalIdShrink) {
            $res['ExternalId'] = $this->externalIdShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalIdShrink = $map['ExternalId'];
        }

        return $model;
    }
}

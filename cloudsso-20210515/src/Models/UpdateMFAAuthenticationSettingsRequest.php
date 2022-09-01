<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateMFAAuthenticationSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $MFAAuthenticationSettings;
    protected $_name = [
        'directoryId'               => 'DirectoryId',
        'MFAAuthenticationSettings' => 'MFAAuthenticationSettings',
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
        if (null !== $this->MFAAuthenticationSettings) {
            $res['MFAAuthenticationSettings'] = $this->MFAAuthenticationSettings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMFAAuthenticationSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['MFAAuthenticationSettings'])) {
            $model->MFAAuthenticationSettings = $map['MFAAuthenticationSettings'];
        }

        return $model;
    }
}

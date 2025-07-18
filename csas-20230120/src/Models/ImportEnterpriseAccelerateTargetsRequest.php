<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ImportEnterpriseAccelerateTargetsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example eap-6457339b546c4cfb
     *
     * @var string
     */
    public $eapId;

    /**
     * @description This parameter is required.
     *
     * @example https://filename.xlsx
     *
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'eapId' => 'EapId',
        'fileUrl' => 'FileUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eapId) {
            $res['EapId'] = $this->eapId;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportEnterpriseAccelerateTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EapId'])) {
            $model->eapId = $map['EapId'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}

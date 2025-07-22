<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadFilePolicyForPartnerRequest extends Model
{
    /**
     * @example esp.website
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 2024/06/25/website_partner_third_party_leads_02.csv
     *
     * @var string
     */
    public $fileName;

    /**
     * @example website_partner_third_party_leads
     *
     * @var string
     */
    public $fileType;
    protected $_name = [
        'bizType' => 'BizType',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadFilePolicyForPartnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}

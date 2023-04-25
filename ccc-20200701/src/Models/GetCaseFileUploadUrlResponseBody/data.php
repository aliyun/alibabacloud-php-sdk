<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCaseFileUploadUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ccc-test/namelist.csv
     *
     * @var string
     */
    public $caseFileKey;

    /**
     * @example https://ccc-v2-online.oss-cn-shanghai.aliyuncs.com/ccc-test/namelist.csv?Expires=1642067227&OSSAccessKeyId=****&Signature=****
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'caseFileKey' => 'CaseFileKey',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseFileKey) {
            $res['CaseFileKey'] = $this->caseFileKey;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaseFileKey'])) {
            $model->caseFileKey = $map['CaseFileKey'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

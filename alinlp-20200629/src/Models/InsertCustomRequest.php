<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class InsertCustomRequest extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $customFileName;

    /**
     * @var string
     */
    public $customUrl;

    /**
     * @var string
     */
    public $regFileName;

    /**
     * @var string
     */
    public $regUrl;

    /**
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'apiId'          => 'ApiId',
        'customFileName' => 'CustomFileName',
        'customUrl'      => 'CustomUrl',
        'regFileName'    => 'RegFileName',
        'regUrl'         => 'RegUrl',
        'serviceCode'    => 'ServiceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->customFileName) {
            $res['CustomFileName'] = $this->customFileName;
        }
        if (null !== $this->customUrl) {
            $res['CustomUrl'] = $this->customUrl;
        }
        if (null !== $this->regFileName) {
            $res['RegFileName'] = $this->regFileName;
        }
        if (null !== $this->regUrl) {
            $res['RegUrl'] = $this->regUrl;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertCustomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['CustomFileName'])) {
            $model->customFileName = $map['CustomFileName'];
        }
        if (isset($map['CustomUrl'])) {
            $model->customUrl = $map['CustomUrl'];
        }
        if (isset($map['RegFileName'])) {
            $model->regFileName = $map['RegFileName'];
        }
        if (isset($map['RegUrl'])) {
            $model->regUrl = $map['RegUrl'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}

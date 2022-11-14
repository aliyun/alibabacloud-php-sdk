<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomRequest extends Model
{
    /**
     * @var string
     */
    public $customFileName;

    /**
     * @var int
     */
    public $customId;

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
        'customFileName' => 'CustomFileName',
        'customId'       => 'CustomId',
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
        if (null !== $this->customFileName) {
            $res['CustomFileName'] = $this->customFileName;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
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
     * @return UpdateCustomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomFileName'])) {
            $model->customFileName = $map['CustomFileName'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
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

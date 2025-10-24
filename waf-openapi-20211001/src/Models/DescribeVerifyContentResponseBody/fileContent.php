<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVerifyContentResponseBody;

use AlibabaCloud\Dara\Model;

class fileContent extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $topDomain;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $verifyPath;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'fileName' => 'FileName',
        'topDomain' => 'TopDomain',
        'value' => 'Value',
        'verifyPath' => 'VerifyPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->topDomain) {
            $res['TopDomain'] = $this->topDomain;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->verifyPath) {
            $res['VerifyPath'] = $this->verifyPath;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['TopDomain'])) {
            $model->topDomain = $map['TopDomain'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['VerifyPath'])) {
            $model->verifyPath = $map['VerifyPath'];
        }

        return $model;
    }
}

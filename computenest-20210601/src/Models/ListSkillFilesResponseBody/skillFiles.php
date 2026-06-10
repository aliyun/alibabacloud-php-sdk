<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListSkillFilesResponseBody;

use AlibabaCloud\Dara\Model;

class skillFiles extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $signedUrl;
    protected $_name = [
        'filePath' => 'FilePath',
        'signedUrl' => 'SignedUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->signedUrl) {
            $res['SignedUrl'] = $this->signedUrl;
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
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['SignedUrl'])) {
            $model->signedUrl = $map['SignedUrl'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class FileUploadRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $tab;
    protected $_name = [
        'fileName' => 'FileName',
        'fileUrl' => 'FileUrl',
        'lang' => 'Lang',
        'tab' => 'Tab',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailResponseBody\resultObject\syncedFiles;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var bool
     */
    public $downloadable;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var bool
     */
    public $visible;
    protected $_name = [
        'downloadable' => 'Downloadable',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'visible' => 'Visible',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadable) {
            $res['Downloadable'] = $this->downloadable;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
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
        if (isset($map['Downloadable'])) {
            $model->downloadable = $map['Downloadable'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }

        return $model;
    }
}

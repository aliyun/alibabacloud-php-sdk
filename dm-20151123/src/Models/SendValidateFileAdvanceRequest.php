<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class SendValidateFileAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $addressColumn;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var bool
     */
    public $hasHeaderRow;

    /**
     * @var bool
     */
    public $removeDuplicate;
    protected $_name = [
        'addressColumn' => 'AddressColumn',
        'fileName' => 'FileName',
        'fileUrlObject' => 'FileUrl',
        'hasHeaderRow' => 'HasHeaderRow',
        'removeDuplicate' => 'RemoveDuplicate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressColumn) {
            $res['AddressColumn'] = $this->addressColumn;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }

        if (null !== $this->hasHeaderRow) {
            $res['HasHeaderRow'] = $this->hasHeaderRow;
        }

        if (null !== $this->removeDuplicate) {
            $res['RemoveDuplicate'] = $this->removeDuplicate;
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
        if (isset($map['AddressColumn'])) {
            $model->addressColumn = $map['AddressColumn'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }

        if (isset($map['HasHeaderRow'])) {
            $model->hasHeaderRow = $map['HasHeaderRow'];
        }

        if (isset($map['RemoveDuplicate'])) {
            $model->removeDuplicate = $map['RemoveDuplicate'];
        }

        return $model;
    }
}

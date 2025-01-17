<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateFileDetectRequest extends Model
{
    /**
     * @var bool
     */
    public $decompress;
    /**
     * @var int
     */
    public $decompressMaxFileCount;
    /**
     * @var int
     */
    public $decompressMaxLayer;
    /**
     * @var string
     */
    public $downloadUrl;
    /**
     * @var string
     */
    public $hashKey;
    /**
     * @var string
     */
    public $ossKey;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'decompress'             => 'Decompress',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer'     => 'DecompressMaxLayer',
        'downloadUrl'            => 'DownloadUrl',
        'hashKey'                => 'HashKey',
        'ossKey'                 => 'OssKey',
        'sourceIp'               => 'SourceIp',
        'type'                   => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->decompress) {
            $res['Decompress'] = $this->decompress;
        }

        if (null !== $this->decompressMaxFileCount) {
            $res['DecompressMaxFileCount'] = $this->decompressMaxFileCount;
        }

        if (null !== $this->decompressMaxLayer) {
            $res['DecompressMaxLayer'] = $this->decompressMaxLayer;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Decompress'])) {
            $model->decompress = $map['Decompress'];
        }

        if (isset($map['DecompressMaxFileCount'])) {
            $model->decompressMaxFileCount = $map['DecompressMaxFileCount'];
        }

        if (isset($map['DecompressMaxLayer'])) {
            $model->decompressMaxLayer = $map['DecompressMaxLayer'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

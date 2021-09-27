<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models;

use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLRequest\uploadMetadatas;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLRequest\userData;
use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
{
    /**
     * @var uploadMetadatas[]
     */
    public $uploadMetadatas;

    /**
     * @var string
     */
    public $uploadURLs;

    /**
     * @var userData
     */
    public $userData;
    protected $_name = [
        'uploadMetadatas' => 'UploadMetadatas',
        'uploadURLs'      => 'UploadURLs',
        'userData'        => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadMetadatas) {
            $res['UploadMetadatas'] = [];
            if (null !== $this->uploadMetadatas && \is_array($this->uploadMetadatas)) {
                $n = 0;
                foreach ($this->uploadMetadatas as $item) {
                    $res['UploadMetadatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
        }
        if (null !== $this->userData) {
            $res['UserData'] = null !== $this->userData ? $this->userData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMediaByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UploadMetadatas'])) {
            if (!empty($map['UploadMetadatas'])) {
                $model->uploadMetadatas = [];
                $n                      = 0;
                foreach ($map['UploadMetadatas'] as $item) {
                    $model->uploadMetadatas[$n++] = null !== $item ? uploadMetadatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
        }
        if (isset($map['UserData'])) {
            $model->userData = userData::fromMap($map['UserData']);
        }

        return $model;
    }
}

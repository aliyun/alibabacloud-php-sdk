<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\file;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\resourceDownloadLink;

class data extends Model
{
    /**
     * @var file
     */
    public $file;

    /**
     * @var nodeConfiguration
     */
    public $nodeConfiguration;

    /**
     * @var resourceDownloadLink
     */
    public $resourceDownloadLink;
    protected $_name = [
        'file' => 'File',
        'nodeConfiguration' => 'NodeConfiguration',
        'resourceDownloadLink' => 'ResourceDownloadLink',
    ];

    public function validate()
    {
        if (null !== $this->file) {
            $this->file->validate();
        }
        if (null !== $this->nodeConfiguration) {
            $this->nodeConfiguration->validate();
        }
        if (null !== $this->resourceDownloadLink) {
            $this->resourceDownloadLink->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toArray($noStream) : $this->file;
        }

        if (null !== $this->nodeConfiguration) {
            $res['NodeConfiguration'] = null !== $this->nodeConfiguration ? $this->nodeConfiguration->toArray($noStream) : $this->nodeConfiguration;
        }

        if (null !== $this->resourceDownloadLink) {
            $res['ResourceDownloadLink'] = null !== $this->resourceDownloadLink ? $this->resourceDownloadLink->toArray($noStream) : $this->resourceDownloadLink;
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
        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }

        if (isset($map['NodeConfiguration'])) {
            $model->nodeConfiguration = nodeConfiguration::fromMap($map['NodeConfiguration']);
        }

        if (isset($map['ResourceDownloadLink'])) {
            $model->resourceDownloadLink = resourceDownloadLink::fromMap($map['ResourceDownloadLink']);
        }

        return $model;
    }
}

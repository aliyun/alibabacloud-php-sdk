<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBaseFileChunk;

use AlibabaCloud\Dara\Model;

class chunkAttachment extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $placeholderId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'placeholderId' => 'PlaceholderId',
        'type' => 'Type',
        'uri' => 'Uri',
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

        if (null !== $this->placeholderId) {
            $res['PlaceholderId'] = $this->placeholderId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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

        if (isset($map['PlaceholderId'])) {
            $model->placeholderId = $map['PlaceholderId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}

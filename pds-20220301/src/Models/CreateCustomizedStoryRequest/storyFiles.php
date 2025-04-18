<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\CreateCustomizedStoryRequest;

use AlibabaCloud\Tea\Model;

class storyFiles extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 63e5e4340f76cb3ead5f40f68163f0f967c1a7bf
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 642a88d4aff041ee68fd4fc89beb80e1119da343
     *
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'fileId' => 'file_id',
        'revisionId' => 'revision_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storyFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }

        return $model;
    }
}

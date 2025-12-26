<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBaseJob;

use AlibabaCloud\Dara\Model;

class knowledgeBaseJobResult extends Model
{
    /**
     * @var int
     */
    public $addChunkCount;

    /**
     * @var int
     */
    public $deleteChunkCount;

    /**
     * @var int
     */
    public $totalFileCount;
    protected $_name = [
        'addChunkCount' => 'AddChunkCount',
        'deleteChunkCount' => 'DeleteChunkCount',
        'totalFileCount' => 'TotalFileCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addChunkCount) {
            $res['AddChunkCount'] = $this->addChunkCount;
        }

        if (null !== $this->deleteChunkCount) {
            $res['DeleteChunkCount'] = $this->deleteChunkCount;
        }

        if (null !== $this->totalFileCount) {
            $res['TotalFileCount'] = $this->totalFileCount;
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
        if (isset($map['AddChunkCount'])) {
            $model->addChunkCount = $map['AddChunkCount'];
        }

        if (isset($map['DeleteChunkCount'])) {
            $model->deleteChunkCount = $map['DeleteChunkCount'];
        }

        if (isset($map['TotalFileCount'])) {
            $model->totalFileCount = $map['TotalFileCount'];
        }

        return $model;
    }
}

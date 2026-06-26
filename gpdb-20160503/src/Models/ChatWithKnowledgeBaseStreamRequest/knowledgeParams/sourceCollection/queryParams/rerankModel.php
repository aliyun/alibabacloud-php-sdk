<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\knowledgeParams\sourceCollection\queryParams;

use AlibabaCloud\Dara\Model;

class rerankModel extends Model
{
    /**
     * @var string
     */
    public $instruct;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $rerankMetadataFields;
    protected $_name = [
        'instruct' => 'Instruct',
        'name' => 'Name',
        'rerankMetadataFields' => 'RerankMetadataFields',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instruct) {
            $res['Instruct'] = $this->instruct;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->rerankMetadataFields) {
            $res['RerankMetadataFields'] = $this->rerankMetadataFields;
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
        if (isset($map['Instruct'])) {
            $model->instruct = $map['Instruct'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RerankMetadataFields'])) {
            $model->rerankMetadataFields = $map['RerankMetadataFields'];
        }

        return $model;
    }
}

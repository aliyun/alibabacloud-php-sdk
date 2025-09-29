<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\messages\searchResult;

use AlibabaCloud\Dara\Model;

class texts extends Model
{
    /**
     * @var string
     */
    public $docUuid;
    protected $_name = [
        'docUuid' => 'DocUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
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
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }

        return $model;
    }
}

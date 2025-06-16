<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitSmartAuditRequest extends Model
{
    /**
     * @var string[]
     */
    public $subCodes;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'subCodes' => 'SubCodes',
        'text' => 'Text',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->subCodes)) {
            Model::validateArray($this->subCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subCodes) {
            if (\is_array($this->subCodes)) {
                $res['SubCodes'] = [];
                $n1 = 0;
                foreach ($this->subCodes as $item1) {
                    $res['SubCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['SubCodes'])) {
            if (!empty($map['SubCodes'])) {
                $model->subCodes = [];
                $n1 = 0;
                foreach ($map['SubCodes'] as $item1) {
                    $model->subCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

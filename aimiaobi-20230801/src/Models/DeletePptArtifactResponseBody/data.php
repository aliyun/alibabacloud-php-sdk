<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeletePptArtifactResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pptArtifactId;
    protected $_name = [
        'pptArtifactId' => 'PptArtifactId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pptArtifactId) {
            $res['PptArtifactId'] = $this->pptArtifactId;
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
        if (isset($map['PptArtifactId'])) {
            $model->pptArtifactId = $map['PptArtifactId'];
        }

        return $model;
    }
}

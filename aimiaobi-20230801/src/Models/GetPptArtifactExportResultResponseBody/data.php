<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptArtifactExportResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $exportFileLink;
    protected $_name = [
        'exportFileLink' => 'ExportFileLink',
    ];

    public function validate()
    {
        if (\is_array($this->exportFileLink)) {
            Model::validateArray($this->exportFileLink);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportFileLink) {
            if (\is_array($this->exportFileLink)) {
                $res['ExportFileLink'] = [];
                $n1 = 0;
                foreach ($this->exportFileLink as $item1) {
                    $res['ExportFileLink'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExportFileLink'])) {
            if (!empty($map['ExportFileLink'])) {
                $model->exportFileLink = [];
                $n1 = 0;
                foreach ($map['ExportFileLink'] as $item1) {
                    $model->exportFileLink[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

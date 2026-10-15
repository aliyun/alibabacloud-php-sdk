<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ContentPlanGenerationTask;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ContentPlanGenerationTask\analysis\modules;

class analysis extends Model
{
    /**
     * @var modules[]
     */
    public $modules;

    /**
     * @var string[]
     */
    public $referenceWritingNotes;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'modules' => 'Modules',
        'referenceWritingNotes' => 'ReferenceWritingNotes',
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (\is_array($this->modules)) {
            Model::validateArray($this->modules);
        }
        if (\is_array($this->referenceWritingNotes)) {
            Model::validateArray($this->referenceWritingNotes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modules) {
            if (\is_array($this->modules)) {
                $res['Modules'] = [];
                $n1 = 0;
                foreach ($this->modules as $item1) {
                    $res['Modules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->referenceWritingNotes) {
            if (\is_array($this->referenceWritingNotes)) {
                $res['ReferenceWritingNotes'] = [];
                $n1 = 0;
                foreach ($this->referenceWritingNotes as $item1) {
                    $res['ReferenceWritingNotes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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
        if (isset($map['Modules'])) {
            if (!empty($map['Modules'])) {
                $model->modules = [];
                $n1 = 0;
                foreach ($map['Modules'] as $item1) {
                    $model->modules[$n1] = modules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReferenceWritingNotes'])) {
            if (!empty($map['ReferenceWritingNotes'])) {
                $model->referenceWritingNotes = [];
                $n1 = 0;
                foreach ($map['ReferenceWritingNotes'] as $item1) {
                    $model->referenceWritingNotes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewResponseBody;

use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewResponseBody\contactContent\reviewResults;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewResponseBody\contactContent\structureResults;
use AlibabaCloud\Tea\Model;

class contactContent extends Model
{
    /**
     * @var reviewResults[]
     */
    public $reviewResults;

    /**
     * @var structureResults[]
     */
    public $structureResults;
    protected $_name = [
        'reviewResults'    => 'ReviewResults',
        'structureResults' => 'StructureResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewResults) {
            $res['ReviewResults'] = [];
            if (null !== $this->reviewResults && \is_array($this->reviewResults)) {
                $n = 0;
                foreach ($this->reviewResults as $item) {
                    $res['ReviewResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->structureResults) {
            $res['StructureResults'] = [];
            if (null !== $this->structureResults && \is_array($this->structureResults)) {
                $n = 0;
                foreach ($this->structureResults as $item) {
                    $res['StructureResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewResults'])) {
            if (!empty($map['ReviewResults'])) {
                $model->reviewResults = [];
                $n                    = 0;
                foreach ($map['ReviewResults'] as $item) {
                    $model->reviewResults[$n++] = null !== $item ? reviewResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StructureResults'])) {
            if (!empty($map['StructureResults'])) {
                $model->structureResults = [];
                $n                       = 0;
                foreach ($map['StructureResults'] as $item) {
                    $model->structureResults[$n++] = null !== $item ? structureResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

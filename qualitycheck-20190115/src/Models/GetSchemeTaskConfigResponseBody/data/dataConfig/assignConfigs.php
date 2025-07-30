<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig\assignConfigs\assignConfigContests;
use AlibabaCloud\Tea\Model;

class assignConfigs extends Model
{
    /**
     * @var assignConfigContests[]
     */
    public $assignConfigContests;
    protected $_name = [
        'assignConfigContests' => 'AssignConfigContests',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignConfigContests) {
            $res['AssignConfigContests'] = [];
            if (null !== $this->assignConfigContests && \is_array($this->assignConfigContests)) {
                $n = 0;
                foreach ($this->assignConfigContests as $item) {
                    $res['AssignConfigContests'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignConfigContests'])) {
            if (!empty($map['AssignConfigContests'])) {
                $model->assignConfigContests = [];
                $n = 0;
                foreach ($map['AssignConfigContests'] as $item) {
                    $model->assignConfigContests[$n++] = null !== $item ? assignConfigContests::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

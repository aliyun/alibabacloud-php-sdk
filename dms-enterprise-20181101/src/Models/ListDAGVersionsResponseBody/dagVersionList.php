<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDAGVersionsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDAGVersionsResponseBody\dagVersionList\dagVersion;
use AlibabaCloud\Tea\Model;

class dagVersionList extends Model
{
    /**
     * @var dagVersion[]
     */
    public $dagVersion;
    protected $_name = [
        'dagVersion' => 'DagVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagVersion) {
            $res['DagVersion'] = [];
            if (null !== $this->dagVersion && \is_array($this->dagVersion)) {
                $n = 0;
                foreach ($this->dagVersion as $item) {
                    $res['DagVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagVersion'])) {
            if (!empty($map['DagVersion'])) {
                $model->dagVersion = [];
                $n                 = 0;
                foreach ($map['DagVersion'] as $item) {
                    $model->dagVersion[$n++] = null !== $item ? dagVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

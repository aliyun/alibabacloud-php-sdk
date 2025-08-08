<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDAGVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDAGVersionsResponseBody\dagVersionList\dagVersion;

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
        if (\is_array($this->dagVersion)) {
            Model::validateArray($this->dagVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagVersion) {
            if (\is_array($this->dagVersion)) {
                $res['DagVersion'] = [];
                $n1 = 0;
                foreach ($this->dagVersion as $item1) {
                    $res['DagVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DagVersion'])) {
            if (!empty($map['DagVersion'])) {
                $model->dagVersion = [];
                $n1 = 0;
                foreach ($map['DagVersion'] as $item1) {
                    $model->dagVersion[$n1] = dagVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

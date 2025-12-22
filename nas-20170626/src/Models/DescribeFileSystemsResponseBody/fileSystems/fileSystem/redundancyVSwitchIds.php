<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Dara\Model;

class redundancyVSwitchIds extends Model
{
    /**
     * @var string[]
     */
    public $redundancyVSwitchId;
    protected $_name = [
        'redundancyVSwitchId' => 'RedundancyVSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->redundancyVSwitchId)) {
            Model::validateArray($this->redundancyVSwitchId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->redundancyVSwitchId) {
            if (\is_array($this->redundancyVSwitchId)) {
                $res['RedundancyVSwitchId'] = [];
                $n1 = 0;
                foreach ($this->redundancyVSwitchId as $item1) {
                    $res['RedundancyVSwitchId'][$n1] = $item1;
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
        if (isset($map['RedundancyVSwitchId'])) {
            if (!empty($map['RedundancyVSwitchId'])) {
                $model->redundancyVSwitchId = [];
                $n1 = 0;
                foreach ($map['RedundancyVSwitchId'] as $item1) {
                    $model->redundancyVSwitchId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListAlgorithmNamesByDeviceIdsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string[]
     */
    public $algorithmNames;
    protected $_name = [
        'gbId'           => 'GbId',
        'algorithmNames' => 'AlgorithmNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->algorithmNames) {
            $res['AlgorithmNames'] = $this->algorithmNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['AlgorithmNames'])) {
            if (!empty($map['AlgorithmNames'])) {
                $model->algorithmNames = $map['AlgorithmNames'];
            }
        }

        return $model;
    }
}

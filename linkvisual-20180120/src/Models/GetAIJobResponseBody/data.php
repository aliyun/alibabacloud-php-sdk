<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIJobResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIJobResponseBody\data\actionJobDTO;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIJobResponseBody\data\dataDTOList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataDTOList[]
     */
    public $dataDTOList;

    /**
     * @var actionJobDTO
     */
    public $actionJobDTO;
    protected $_name = [
        'dataDTOList'  => 'DataDTOList',
        'actionJobDTO' => 'ActionJobDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDTOList) {
            $res['DataDTOList'] = [];
            if (null !== $this->dataDTOList && \is_array($this->dataDTOList)) {
                $n = 0;
                foreach ($this->dataDTOList as $item) {
                    $res['DataDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->actionJobDTO) {
            $res['ActionJobDTO'] = null !== $this->actionJobDTO ? $this->actionJobDTO->toMap() : null;
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
        if (isset($map['DataDTOList'])) {
            if (!empty($map['DataDTOList'])) {
                $model->dataDTOList = [];
                $n                  = 0;
                foreach ($map['DataDTOList'] as $item) {
                    $model->dataDTOList[$n++] = null !== $item ? dataDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ActionJobDTO'])) {
            $model->actionJobDTO = actionJobDTO::fromMap($map['ActionJobDTO']);
        }

        return $model;
    }
}

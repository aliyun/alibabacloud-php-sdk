<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponseBody\data\demonstrationList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var demonstrationList[]
     */
    public $demonstrationList;
    protected $_name = [
        'demonstrationList' => 'DemonstrationList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demonstrationList) {
            $res['DemonstrationList'] = [];
            if (null !== $this->demonstrationList && \is_array($this->demonstrationList)) {
                $n = 0;
                foreach ($this->demonstrationList as $item) {
                    $res['DemonstrationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DemonstrationList'])) {
            if (!empty($map['DemonstrationList'])) {
                $model->demonstrationList = [];
                $n                        = 0;
                foreach ($map['DemonstrationList'] as $item) {
                    $model->demonstrationList[$n++] = null !== $item ? demonstrationList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

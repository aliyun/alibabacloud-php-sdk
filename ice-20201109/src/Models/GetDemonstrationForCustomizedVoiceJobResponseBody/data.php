<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponseBody\data\demonstrationList;

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
        if (\is_array($this->demonstrationList)) {
            Model::validateArray($this->demonstrationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->demonstrationList) {
            if (\is_array($this->demonstrationList)) {
                $res['DemonstrationList'] = [];
                $n1                       = 0;
                foreach ($this->demonstrationList as $item1) {
                    $res['DemonstrationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DemonstrationList'])) {
            if (!empty($map['DemonstrationList'])) {
                $model->demonstrationList = [];
                $n1                       = 0;
                foreach ($map['DemonstrationList'] as $item1) {
                    $model->demonstrationList[$n1++] = demonstrationList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishObjectListResponseBody;

use AlibabaCloud\Tea\Model;

class publishResult extends Model
{
    /**
     * @var int[]
     */
    public $submitIdList;
    protected $_name = [
        'submitIdList' => 'SubmitIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->submitIdList) {
            $res['SubmitIdList'] = $this->submitIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubmitIdList'])) {
            if (!empty($map['SubmitIdList'])) {
                $model->submitIdList = $map['SubmitIdList'];
            }
        }

        return $model;
    }
}

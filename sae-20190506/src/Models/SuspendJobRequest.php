<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class SuspendJobRequest extends Model
{
    /**
     * @description The ID of the job template.
     *
     * @example ee1a7a07-abcb-4652-a1d3-2d57f415****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to suspend the job template.
     *
     * @example true
     *
     * @var bool
     */
    public $suspend;
    protected $_name = [
        'appId'   => 'AppId',
        'suspend' => 'Suspend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->suspend) {
            $res['Suspend'] = $this->suspend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuspendJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Suspend'])) {
            $model->suspend = $map['Suspend'];
        }

        return $model;
    }
}

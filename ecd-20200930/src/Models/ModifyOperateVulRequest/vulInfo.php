<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOperateVulRequest;

use AlibabaCloud\Tea\Model;

class vulInfo extends Model
{
    /**
     * @description The ID of cloud desktop in which the vulnerability is detected.
     *
     * @example ecd-138dsptkrt00u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the vulnerability.
     *
     * @example oval:com.redhat.rhsa:def:20171100
     *
     * @var string
     */
    public $name;

    /**
     * @description The tag that you want to add to the vulnerability.
     *
     * @example oval
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'name'      => 'Name',
        'tag'       => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}

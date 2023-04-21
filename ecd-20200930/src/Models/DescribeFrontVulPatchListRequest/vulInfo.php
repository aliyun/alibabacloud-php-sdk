<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListRequest;

use AlibabaCloud\Tea\Model;

class vulInfo extends Model
{
    /**
     * @description The ID of the cloud desktop that is affected by the vulnerability.
     *
     * @example ecd-bvolet79zmpkq****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the vulnerability.
     *
     * @example 5000803
     *
     * @var string
     */
    public $name;

    /**
     * @description The tag that you want to add to the vulnerability.
     *
     * @example system
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

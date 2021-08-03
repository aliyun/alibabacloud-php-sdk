<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopIdsByVulNamesResponseBody;

use AlibabaCloud\Tea\Model;

class desktopItems extends Model
{
    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopId;
    protected $_name = [
        'desktopName' => 'DesktopName',
        'desktopId'   => 'DesktopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems;

use AlibabaCloud\Tea\Model;

class officeSites extends Model
{
    /**
     * @description The ID of the office network.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the office network.
     *
     * @example DemoOfficeNetwork
     *
     * @var string
     */
    public $officeSiteName;
    protected $_name = [
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return officeSites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        return $model;
    }
}

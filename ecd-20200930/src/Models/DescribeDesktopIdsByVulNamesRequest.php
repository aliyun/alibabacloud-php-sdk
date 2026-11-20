<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDesktopIdsByVulNamesRequest extends Model
{
    /**
     * @var string
     */
    public $necessity;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $vulName;
    protected $_name = [
        'necessity' => 'Necessity',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'type' => 'Type',
        'vulName' => 'VulName',
    ];

    public function validate()
    {
        if (\is_array($this->vulName)) {
            Model::validateArray($this->vulName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vulName) {
            if (\is_array($this->vulName)) {
                $res['VulName'] = [];
                $n1 = 0;
                foreach ($this->vulName as $item1) {
                    $res['VulName'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VulName'])) {
            if (!empty($map['VulName'])) {
                $model->vulName = [];
                $n1 = 0;
                foreach ($map['VulName'] as $item1) {
                    $model->vulName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

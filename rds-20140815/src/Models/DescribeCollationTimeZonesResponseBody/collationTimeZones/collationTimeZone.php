<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponseBody\collationTimeZones;

use AlibabaCloud\Tea\Model;

class collationTimeZone extends Model
{
    /**
     * @description The description of the character set collations and time zones.
     *
     * @example Kabul
     *
     * @var string
     */
    public $description;

    /**
     * @description The offset of the UTC time. The offset is in the following format: (UTC+\<i>HH:mm\</i>).
     *
     * @example (UTC+04:30)
     *
     * @var string
     */
    public $standardTimeOffset;

    /**
     * @description The time zone that is available for use in ApsaraDB RDS.
     *
     * @example Afghanistan Standard Time
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'description'        => 'Description',
        'standardTimeOffset' => 'StandardTimeOffset',
        'timeZone'           => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->standardTimeOffset) {
            $res['StandardTimeOffset'] = $this->standardTimeOffset;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return collationTimeZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StandardTimeOffset'])) {
            $model->standardTimeOffset = $map['StandardTimeOffset'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody\spaceUsageDataList\csUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody\spaceUsageDataList\dbUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody\spaceUsageDataList\fcUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody\spaceUsageDataList\whUsage;
use AlibabaCloud\Tea\Model;

class spaceUsageDataList extends Model
{
    /**
     * @var csUsage
     */
    public $csUsage;

    /**
     * @var dbUsage
     */
    public $dbUsage;

    /**
     * @description 标记该数据是否出账。
     * - false：不出账，例如在空间停服的情况下，用量数据不用于出账。
     * @example true
     *
     * @var bool
     */
    public $effectiveBillFlag;

    /**
     * @var fcUsage
     */
    public $fcUsage;

    /**
     * @example 2022-06-17T16:00:00Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @var whUsage
     */
    public $whUsage;
    protected $_name = [
        'csUsage'           => 'CsUsage',
        'dbUsage'           => 'DbUsage',
        'effectiveBillFlag' => 'EffectiveBillFlag',
        'fcUsage'           => 'FcUsage',
        'timestamp'         => 'Timestamp',
        'whUsage'           => 'WhUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csUsage) {
            $res['CsUsage'] = null !== $this->csUsage ? $this->csUsage->toMap() : null;
        }
        if (null !== $this->dbUsage) {
            $res['DbUsage'] = null !== $this->dbUsage ? $this->dbUsage->toMap() : null;
        }
        if (null !== $this->effectiveBillFlag) {
            $res['EffectiveBillFlag'] = $this->effectiveBillFlag;
        }
        if (null !== $this->fcUsage) {
            $res['FcUsage'] = null !== $this->fcUsage ? $this->fcUsage->toMap() : null;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->whUsage) {
            $res['WhUsage'] = null !== $this->whUsage ? $this->whUsage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaceUsageDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsUsage'])) {
            $model->csUsage = csUsage::fromMap($map['CsUsage']);
        }
        if (isset($map['DbUsage'])) {
            $model->dbUsage = dbUsage::fromMap($map['DbUsage']);
        }
        if (isset($map['EffectiveBillFlag'])) {
            $model->effectiveBillFlag = $map['EffectiveBillFlag'];
        }
        if (isset($map['FcUsage'])) {
            $model->fcUsage = fcUsage::fromMap($map['FcUsage']);
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['WhUsage'])) {
            $model->whUsage = whUsage::fromMap($map['WhUsage']);
        }

        return $model;
    }
}

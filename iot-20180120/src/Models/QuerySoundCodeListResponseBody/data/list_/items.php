<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1620634297000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example OPEN
     *
     * @var string
     */
    public $openType;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $soundCode;

    /**
     * @example www.taobao.com
     *
     * @var string
     */
    public $soundCodeContent;
    protected $_name = [
        'duration'         => 'Duration',
        'gmtCreate'        => 'GmtCreate',
        'name'             => 'Name',
        'openType'         => 'OpenType',
        'soundCode'        => 'SoundCode',
        'soundCodeContent' => 'SoundCodeContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->openType) {
            $res['OpenType'] = $this->openType;
        }
        if (null !== $this->soundCode) {
            $res['SoundCode'] = $this->soundCode;
        }
        if (null !== $this->soundCodeContent) {
            $res['SoundCodeContent'] = $this->soundCodeContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpenType'])) {
            $model->openType = $map['OpenType'];
        }
        if (isset($map['SoundCode'])) {
            $model->soundCode = $map['SoundCode'];
        }
        if (isset($map['SoundCodeContent'])) {
            $model->soundCodeContent = $map['SoundCodeContent'];
        }

        return $model;
    }
}

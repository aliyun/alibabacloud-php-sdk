<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptRefineResponseBody\payload;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string[][]
     */
    public $content;

    /**
     * @var string
     */
    public $outline;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $summary;

    /**
     * @example xx
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'content' => 'content',
        'outline' => 'outline',
        'role' => 'role',
        'scene' => 'scene',
        'summary' => 'summary',
        'text' => 'text',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->outline) {
            $res['outline'] = $this->outline;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = $map['content'];
            }
        }
        if (isset($map['outline'])) {
            $model->outline = $map['outline'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
